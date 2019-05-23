#include <stdio.h>
int main()
{
    int sum,b,a,c,i;
    scanf("%d%d%d",&a,&b,&c);
    sum=(a*(2*b+(a-1)*c));
    sum=sum/2;
    printf("%d",sum);
            return 0;
}
