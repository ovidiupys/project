#include <iostream>
using namespace std;

class test
{
	public:
	void f();
};
void test::f()
{
return 1;
}

int main(void)
{
test test;

test.f();

return 0;
}
